<?php

use App\Models\Todo;

?>


    <div>
        <div class="card">
            <div class="card-header">
                Featured
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
                        <label for="exampleInputEmail1" class="form-label">Todo</label>
                        <input wire:model="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div>
                            @error('name')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    