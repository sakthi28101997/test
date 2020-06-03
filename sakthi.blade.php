@extends('layouts.main');
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" >
                <div class="col-sm-12 col-md-12 well" id="content">

                    <div class="form-group">
                        <label for="name"> Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Product name" value="" required>
                    </div>

                    <div class="form-group">
                        <label for="price">email</label>
                        <input type="email" class="form-control" id="email"  name="price" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">phone</label>
                        <input type="text" class="form-control" id="phone" name="phone"   required>
                    </div>
                    <div class="form-group">
                        <label for="description">password</label>
                        <input type="text" class="form-control" id="password" name="password"  required>
                    </div>
                    <input type="submit" id="submit" value="Submit">

                </div>

        </div>

    </div>
