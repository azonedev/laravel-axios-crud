
@include('partials.header')
<div class="p-2"></div>
    <h1 class="text-center">Hello, world :)</h1>
    <h2 class="text-center"><a href="{{url('/')}}">axios CRUD</a></h2>
    <div class="p-4"></div>

    <div class="container">
        <form action="" method="post">
          @csrf
            <div class="form-group">
                <input type="text" id="name" name="name" placeholder="Enter your full name" class="form-control">
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Enter a valid email" class="form-control">
            </div>

            <button type="button" onclick="store()" class="btn btn-primary">Database a pathai daw</button>
        </form>
    </div>

    <div class="p-3"></div>

    <div class="fluid">
        <div class="container">
            <table class="table table-hover">
              <thead class="thead-dark ">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Created @</th>
                  <th scope="col">#</th>
                </tr>
              </thead>
              <tbody>
                <!-- <?php $i=0; ?> -->
                @forelse($data as $item)
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td id="tblName">{{$item->name}}</td>
                  <td id="tblEmail">{{$item->email}}</td>
                  <td id="tblCreateAt">{{$item->created_at}}</td>
                  <td>
                    @php
                        $id = $item->id;
                    @endphp
                    <button class="btn btn-danger" onclick='del("<?php echo $item->id ?>")'>Delete</button>
                  </td>
                </tr>
                @empty
                <tr><td colspan="4" class="text-center">No data found</td></tr>
                @endforelse
              </tbody>
            </table>

        </div>
    </div>

@include('partials.footer')