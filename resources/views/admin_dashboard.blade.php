<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | nyne </title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
@if(session()->has('user'))
<body>

    <div id = "admin-bar">

        <a href = "/">
            <img src = "images/logo.png" id = "logo" width = "30%" height = "85%">
        </a>
    
        <h1>nyne admin</h1>
    </div>

    <main class = "table"> 
        <i class='bx bx-search-alt-2'></i>

        <input type = "text" placeholder="Search..." id="admin-search" onkeyup="searchResult();">
        
        <label> search by </label> <select name = "search_by" id = "select-search">
            <!-- <option value ="all" style="color:white;">All </option> -->
            <option value = "fname"style="color:white;" > Name </option>
            <option value = "email"style="color:white;"> E-mail </option>
            <option value = "comp_name"style="color:white;"> Company name </option>
            <option value = "job_title"style="color:white;"> Role </option>
        </select>
        
        <a href="admin_dashboard"><button class="btn" id="show_all">Show All</button></a>
        

        <section class = "table_body">
                <h1>Our Clients</h1>
            </section>
                
            <section class = "table-body">
                <table  class = "data-table">
                    <thead>
                        <tr class = "user-data">
                            <th class = "data-headers">E-mail</th>
                            <th class = "data-headers">Name</th>
                            <th class = "data-headers">Phone#</th>
                            <th class = "data-headers">Location</th>
                            <th class = "data-headers">Company name</th>
                            <th class = "data-headers">Role</th>
                            <th class = "data-headers">Actions</th>
                        </tr>
                    </thead>
            
                    <tbody id= "clients">
                    @foreach ($data as $row)
                        <tr class="user-data">
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->fname }} {{ $row->lname }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>{{ $row->location }}</td>
                            <td>{{ $row->comp_name }}</td>
                            <td>{{ $row->job_title }}</td>
                            
                            <td class = "data-options">
                                <a href = "all_cards_admin/{{$row->email}}" target="_blank">
                                    <i class='bx bx-link-external' style="font-size: 21px ;color:#7E57C2" ></i>
                                </a>
                                
                                <a href = "update/{{$row->email}}" target="_blank" >
                                    <i class='bx bxs-edit' style="font-size: 21px ;color:#7E57C2" ></i>
                                </a>
                                
                                <button class="delete-btn" data-email="{{$row->email}}" style="background-color: transparent; ">                
                                    <i class='bx bxs-trash' style="color:#F54637; font-size: 21px" ></i>
                                </button>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
        
                </table>
            </section>
        </main>
        <script src="{{ asset('scripts/admin.js') }}"></script>
</body>
@else
    Error: Email not set in the session.
    @php
        return redirect('login_page');
    @endphp
@endif
</html>