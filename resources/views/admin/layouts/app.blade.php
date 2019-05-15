<!DOCTYPE html>
<html lang="en">
<head>
   @include('admin.layouts.head')
</head>
<body>
        <section id="container" class="">

            @include('admin.layouts.header')

            @include('admin.layouts.sidebar')

            <section id="main-content">

                <section class="wrapper">

                    @section('main-content')
                
                        {{-- @include('admin.include.messages') --}}
            
                    @show

                </section>

            </section>
            

            @include('admin.layouts.jquery')
</section> 
</body>
</html>