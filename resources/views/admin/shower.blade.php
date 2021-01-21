
{{Illuminate\Support\Carbon::setLocale('fa')}}

<div class="container">
    <h1 class="text-center">----- دسته بندی -----</h1>
    
    <p id="create_category_message" class="bg-success text-center" style="display: none;color:white;">دسته بندی ذخیره شد</p>
    <p id="edit-category-message" class="bg-primary text-center" style="display: none;color:white;">دسته بندی ویرایش شد</p>
    <p id="delete-category-message" class="bg-danger text-center" style="display: none;color:white;">دسته بندی حذف شد</p>
    <p id="clone-category-message" class="bg-info text-center" style="display: none;color:white;">دسته بندی کلون شد</p>
  

    <div class="row-left">
      <div class="row-left">

        <button style="float: left" class="btn btn-danger" onclick="deleteSelectCategory()">حذف انتخاب شده ها</button>
        <button style="float: left" class="btn btn-info" onclick="cloneSelectCategory()" data-toggle="popover"  data-html="true" data-content="<strong>موارد انتخاب شده را دوباره بساز</strong>">بازسازی انتخاب شده ها</button>
      </div>
    {!! Form::open(['id'=>'create_category']) !!}
    <input type="checkbox" name="childCategory" id="childCategory">
    <select name="parent_id" id="parentCategory" disabled>
      <option value="">دسته بندی اصلی</option>
    @foreach ($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
    </select> 

    {!! Form::text('name',null,['placeholder'=>'نام دسته بندی']) !!}
    {!! Form::button('ایجاد',['class'=>'btn btn-success','onclick'=>'createCategory()']) !!}
    {!! Form::close() !!}

    

    <form id='edit-category'> 
      @csrf
    <div id="edit-form-category">  
      
    </div>
  
    </form>

    </div>  

    <br>

    <table class="table table-hover rounded">
      <thead class="thead-dark">
        <tr>
          <th><input id="checkAll" type="checkbox"></th>
          <th>#</th>
          <th>نام</th>
          <th>Parent Name</th>
          <th>تاریخ ایجاد</th>
          <th> تاریخ ویرایش</th>
          <th>حذف</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($categories as $category)
      @if ($category->name)
        <tr id="{{$category->id}}">
          <td><input type="checkbox" name="checkBoxes[]" class="sub_check" value="{{$category->id}}"></td>
          <td>{{$category->id}}</td>
          <td onclick="createEditFormCategory({{$category->id}},'{{$category->name}}')" data-toggle="popover"  data-html="true" data-content="برای ویرایش کلیک کنید">{{$category->name}}</td>
          <td>{{$category->parent_id ? $category->parent_name: ''}}</td>
          <td>{{$category->created_at ? $category->created_at->diffForHumans() : null}}</td>
          <td>{{$category->updated_at ? $category->updated_at->diffForHumans() : null}}</td>
          <td>
            <form class="delete-category"> 
              @csrf
              <button type="button" onclick="deleteCategory({{$category->id}});" class="btn btn-danger">حذف</button>
            </form>
          
          </td>
        </tr>
      @endif
      @endforeach
    </tbody>

    </table>
  </div>


