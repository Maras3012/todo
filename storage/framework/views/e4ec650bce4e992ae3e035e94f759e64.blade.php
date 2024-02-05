<?php

use App\Models\Todo;

?>


    <div>
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <form wire:submit="save">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Todo</label>
                        <input wire:model="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    