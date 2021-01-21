$(document).ready(function() {
    // process the form ON CREATE !!!

    $(".categoryName").click(function() {
        if (
            $(this)
                .children()
                .attr("disabled")
        ) {
            var id = $(this)
                .parent()
                .find(".categoryId")
                .text();
            var form = `<button type='button' onclick='editCategory(${id})'>Edit</button>`;
            $(this)
                .children()
                .prop("disabled", false)
                .append(form);
        } else {
            $(this)
                .children()
                .prop("disabled", true);
            $(this)
                .find("button")
                .remove();
        }
    });

    $("#kt_quick_user_toggle").click(function() {
        $("#kt_quick_user").load("admin/users/profile/panel");
    });

    $("#checkAll").click(function() {
        $(".sub_check").prop("checked", $(this).prop("checked"));
    });

    $("#childCategory").click(function() {
        if ($(this).prop("checked")) {
            $("#parentCategory").prop("disabled", false);
        } else {
            $("#parentCategory").prop("disabled", "disabled");
        }
    });

    // $(document).on("click", ".pagination a", function(event) {
    //     event.preventDefault();
    //     var page = $(this)
    //         .attr("href")
    //         .split("page=")[1];
    //     getMorePosts(page);
    // });

    // function getMorePosts(page) {
    //     $.ajax({
    //         type: "GET",
    //         url: "/admin?page=" + page,
    //         success: function() {
    //             // $("#kt_content").load("admin?page=" + page);
    //         },
    //         error: function() {
    //             console.log("bad and bad");
    //         }
    //     });
    // }
});

function submitCreatePostRedirectBack() {
    var body = document.getElementById("kt-ckeditor-1").value;
    $.ajax({
        type: "POST",
        url: "/admin/posts",
        data: {
            _token: $("input[name='_token']").val(),
            photo_id: $("#photo_id").val(),
            category_name: $("#selectore").val(),
            title: $("#title").val(),
            body: body
        },
        success: function() {
            console.log(body);
        },
        error: function() {
            console.log(body);
        }
    });
    return false;
}

function createCategory() {
    $("#create_category_message").slideUp("slow");
    // process the form
    $.ajax({
        type: "POST", // define the type of HTTP verb we want to use (POST for our form)
        url: "/admin/categories", // the url where we want to POST
        data: $("#create_category").serialize(), // our data object
        success: function() {
            document.getElementById("create_category").reset();
            $("#create_category_message").slideDown("slow");
            setTimeout(function() {
                $("#create_category_message").slideUp("slow");
            }, 3000);
        },
        error: function() {
            alert("something is wrong");
        }
    });
    // stop the form from submitting the normal way and refreshing the page
}

function createCategoryInPagePost() {
    var nameCategoryInPagePost = $("#nameCategoryInPagePost").val();
    var form = `<option value=${nameCategoryInPagePost}>${nameCategoryInPagePost}</option>`;
    var token = $("input[name='_token']").val();

    $.ajax({
        type: "POST",
        url: "/admin/categories",
        data: {
            _token: token,
            name: nameCategoryInPagePost
        },
        success: function() {
            $("#selectore").append(form);
            document.getElementById("nameCategoryInPagePost").value = "";
        },
        error: function() {
            console.log("bad");
        }
    });
}

// function createEditFormCategory(id, name) {
//     var buttonEdit = "<button type='button'>Edit</button>";
//     $(".categoryName")
//         .parent()
//         .parent()
//         .prop("disabled", false);

//     $("#edit-form-category").empty();
//     var form =
//         "<input id='url-id-edit' name='id' type='hidden' value='" +
//         id +
//         "'><input type='text' name='name' value='" +
//         name +
//         "'><button type='button' onclick='editCategory()' id='edit-category-button' class='btn btn-primary'>Edit</button>";
//     $("#edit-form-category").append(form);
// }

// function editCategory() {
//     $("#edit-category-message").slideUp("slow");
//     var uid = document.getElementById("url-id-edit").value;
//     var url = "/admin/categories/" + uid;

//     // process the form
//     $.ajax({
//         type: "PATCH", // define the type of HTTP verb we want to use (POST for our form)
//         url: url, // the url where we want to POST
//         data: $("#edit-category").serialize(), // our data object
//         success: function(res) {
//             $("#edit-category-message").slideDown("slow");
//             setTimeout(function() {
//                 $("#edit-category-message").slideUp("slow");
//             }, 3000);
//         },
//         error: function(res) {
//             alert("something is wrong on Edit");
//         }
//     });
// }

function editCategory(id) {
    $("#edit-category-message").slideUp("slow");
    var token = $("input[name='_token']").val();
    var url = "/admin/categories/" + id;
    var name = $(`#inputCategoryName${id}`).val();

    $.ajax({
        type: "PATCH",
        url: url,
        data: { _token: token, name: name },
        success: function() {
            $("#edit-category-message").slideDown("slow");
            setTimeout(function() {
                $("#edit-category-message").slideUp("slow");
            }, 3000);
        },
        error: function(data) {
            console.log(data);
        }
    });
}

function deleteCategory(params) {
    $("#delete-category-message").slideUp("slow");
    var categoryId = params;
    var url = "/admin/categories/" + categoryId;

    // process the form
    $.ajax({
        type: "DELETE", // define the type of HTTP verb we want to use (POST for our form)
        url: url, // the url where we want to POST
        data: $(".delete-category").serialize(), // our data object
        success: function() {
            $("#delete-category-message").slideDown("slow");
            setTimeout(function() {
                $("#delete-category-message").slideUp("slow");
            }, 3000);
        },
        error: function() {
            alert("erorrrrrr");
        }
    });
}

function activeBlockForm(id, val) {
    var isActive = val;
    $.ajax({
        type: "PUT",
        url: "/admin/users/active/" + id,
        data: {
            _token: "oRblLgU81zPnb7uU6pyzamcR5nECxh3k8ABQDg4c",
            is_active: isActive
        },
        success: function() {
            console.log("success");
        },
        error: function() {
            console.log("erroror");
        }
    });
}

function deleteUser(id) {
    $("deleteUserMessage").slideUp("slow");
    var token = $("input[name='_token']").val();
    $.ajax({
        type: "DELETE",
        url: "/admin/users/" + id,
        data: { _token: token },
        success: function() {
            $("#deleteUserMessage").slideDown("slow");
            setTimeout(function() {
                $("#deleteUserMessage").slideUp("slow");
            }, 3000);
        },
        error: function(data) {
            console.log(data);
        }
    });
}

function onChangeOptionSelector() {
    var optionValue = $("#optionValue").val();

    $.ajax({
        type: "GET",
        url: "/admin?paginate=" + optionValue,
        success: function() {
            $("#menu1").load("admin?paginate=" + optionValue);
        },
        error: function() {
            console.log("khak bar saret azizam");
        }
    });
}

// function onChangeOptionSelector() {
//     var optionValue = $("#optionValue").val();

//     $.ajax({
//         type: "GET",
//         url: "/admin/posts/paginate/" + optionValue,
//         success: function() {
//             $("#kt_content").load("admin/posts/paginate/" + optionValue);
//         },
//         error: function() {
//             console.log("khak bar saret azizam");
//         }
//     });
// }

function deleteSelectCategory() {
    var ids = new Array();
    var token = $("input[name='_token']").val();
    if ($('input[name="checkBoxes[]"]:checked').length > 0) {
        Swal.fire({
            title: "از انجام این کار مطئنید؟",
            text: "حذف موارد انتخاب شده",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "حذف کن"
        }).then(result => {
            if (result.isConfirmed) {
                $('input[name="checkBoxes[]"]:checked').each(function() {
                    ids.push($(this).val());
                });

                $.ajax({
                    type: "POST",
                    url: "/admin/categories/deleteSelectCategory",
                    data: {
                        _token: token,
                        ids: ids
                    },
                    success: function() {
                        $("#delete-category-message").slideDown("slow");
                        setTimeout(function() {
                            $("#delete-category-message").slideUp("slow");
                        }, 3000);
                    },
                    error: function() {
                        console.log("ridi");
                    }
                });
            }
        });
    } else {
        Swal.fire("هیچی انتخاب نشده!");
    }
}

function cloneSelectCategory() {
    $("#clone-category-message").slideUp("slow");
    var ids = new Array();
    var token = $("input[name='_token']").val();
    if ($("input[name='checkBoxes[]']:checked").length > 0) {
        Swal.fire({
            title: "از انجام این کار مطئنید؟",
            text: "بازسازی موارد انتخاب شده",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "بازسازی کن"
        }).then(result => {
            if (result.isConfirmed) {
                $("input[name='checkBoxes[]']:checked").each(function() {
                    ids.push($(this).val());
                });
                $.ajax({
                    type: "POST",
                    url: "/duplicate",
                    data: { _token: token, ids: ids },
                    success: function() {
                        $("#clone-category-message").slideDown("slow");
                        setTimeout(function() {
                            $("#clone-category-message").slideUp("slow");
                        }, 3000);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }
        });
    } else {
        Swal.fire("هیچی انتخاب نشده!");
    }
}

function chat() {
    var img = $("#image").val();
    var message = $("#message").val();
    var form = `<div class="container"> <img src="${img}" alt="Avatar" style="width:100%;">
    <p> ${message} </p>
    <span class="time-right"> Now </span> </div>`;
    $.ajax({
        type: "POST",
        url: "/chat",
        data: $("form").serialize(),
        success: function() {
            document.getElementById("message").value = "";
            $("#appendLastMessage").append(form);
        },
        error: function() {
            console.log("nafrestad");
        }
    });
}

function getData() {
    var body = KTCkeditor.instances.editor.getData();

    console.log(body);
}

function deleteSelectUser() {
    $("#deleteUserMessage").slideUp("slow");

    var ids = new Array();
    var token = $("input[name='_token']").val();
    if ($("input[name='checkBoxes[]']:checked").length > 0) {
        Swal.fire({
            title: "از انجام این کار مطئنید؟",
            text: "حذف کردن کاربران انتخاب شده",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "حذف کن"
        }).then(result => {
            if (result.isConfirmed) {
                $("input[name='checkBoxes[]']:checked").each(function() {
                    ids.push($(this).val());
                });
                $.ajax({
                    type: "POST",
                    url: "/admin/users/deleteSelectUser",
                    data: { _token: token, ids: ids },
                    success: function(data) {
                        $("#deleteUserMessage").slideDown("slow");
                        setTimeout(function() {
                            $("#deleteUserMessage").slideUp("slow");
                        }, 3000);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }
        });
    } else {
        Swal.fire("هیچی انتخاب نشده!");
    }
}

function activeSelectUser() {
    var ids = new Array();
    var token = $("input[name='_token']").val();
    if ($("input[name='checkBoxes[]']:checked").length > 0) {
        $("input[name='checkBoxes[]']:checked").each(function() {
            ids.push($(this).val());
        });
        $.ajax({
            type: "POST",
            url: "/admin/users/activeSelectUser",
            data: { _token: token, ids: ids },
            success: function() {
                console.log("anjam shod");
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
}
