<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <META http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
    <body>
      <div class="container">
        <div>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
        </div>
        <div>

          <form action="{{route('course.save')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label>Select a category</label>
            	<select name="category">
            	    <option>Category 1</option>
                  <option>Category 2</option>
                  <option>Category 3</option>
                  <option>Category 4</option>
            	</select>
            	<br><br>
            <label>Select a subcategory</label>
            <select name="subcategory">
                <option>SubCategory 1</option>
                <option>SubCategory 2</option>
                <option>SubCategory 3</option>
                <option>SubCategory 4</option>
            </select>
            <br><br>

            <label for="course">Course Name:</label>
            <input type="text" name="course"/>

            <div id="content">
              <div id="section-content-1">
                <div id="secs">
                    <label for="section">Section 1:</label>
                    <input type="text" name="section[1]" id="section"/>
                </div>
                <div id="lects">
                    <label for="lecture">Lecture 1:</label>
                    <input type="text" name="lecture[1][]"/>
                </div>
                <button type="button" id="add-lect" data-lect="1">Add New Lecture</button><br><br>
              </div>
            </div>

            <button type="button" id="add-sect" data-sect="1" >Add New Section</button>
            <br><br><br><br>

            <button class="btn-primary" type="submit">Save</button>
            </form>

        </div>
      </div>
    </body>
</html>


<script src="{{asset('/js/code.js')}}"></script>
