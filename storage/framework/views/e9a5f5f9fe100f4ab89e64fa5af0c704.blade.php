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
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($this->todos as $todo)
            <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <td>{{$todo->name}}</td>
                <td>
                    <button class="btn btn-danger btn-sm float-end">Delete</button>
                    <button class="btn btn-success btn-sm float-end">Completed</button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    