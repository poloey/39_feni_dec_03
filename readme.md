# class 39, Sunday, Dec 3

# mvc structure 
~~~
r
c    m
v 
~~~

## route
~~~php
Route::get('route_path', 'controller@function_name');
~~~

// to show view 
~~~php
view ('name_of_view_file')
~~~

// to pass variable to view 
~~~php
view('view_name', [key => value, key => value])
view('view_name', compact('variable_name'))
view('vie_name')->with(key, value)
view('vie_name')->withKey(value)
~~~

## blade directive
~~~php
yield('content')
extends('parent_file')

section('content')
endsection()
//for smaller content
section('content', 'some content')

@for()
@endfor

@if()
@endif

@while()
@endwhile

@foreach()
@endforeach
~~~

## blade echo tag
~~~php
{{  }}
~~~

## blade helper function
~~~php
url()
asset()
~~~

## views directory
~~~
resources > views
~~~
## asset folder
~~~
public
~~~
















