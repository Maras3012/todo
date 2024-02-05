<?php

use App\Models\Todo;

?>


    <div>
        <div class="card">
            <div class="card-header">
                Todo App
            </div>
            <div class="card-body">
                <div>
                   @if(session('status'))
                       <div class="alert alert-success">
                           {{session('status')}}
                       </div>
                   @endif
                </div>
                <form wire:submit="save">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Add new todo</label>
                        <input wire:model="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div>
                            @error('name')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            </tbody>
        </table>
    </div>
    