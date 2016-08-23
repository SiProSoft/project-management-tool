@extends('layouts.master')

@section('body')

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="_project--list-title">List title</div>
            <div class="_project--list">
                <div class="_project--task">
                    <a href="/task/1" class="_project--title">Task name</a>
                    <div class="_project--short-description">
                        <p class="small">Short description ... A little more description</p>
                    </div>
                </div>

                <div class="_project--add-task _obj--table">
                    <div class="_obj--table-cell">
                        <input type="text" name="task" class="form-control">
                    </div>
                    <div class="_obj--table-cell">
                        <input type="button" name="submit" value="Add" class="form-control">
                    </div>
                </div>
            </div>
        </div>



        <div class="col-sm-4">
            <div class="_project--list-title">List title</div>
            <div class="_project--list">
                <div class="_project--task">
                    <a href="/task/1" class="_project--title">Task name</a>
                    <div class="_project--short-description">
                        <p class="small">Short description ... A little more description</p>
                    </div>
                </div>

                <div class="_project--task">
                    <a href="/task/1" class="_project--title">Task name</a>
                    <div class="_project--short-description">
                        <p class="small">Short description ... A little more description</p>
                    </div>
                </div>

                <div class="_project--task">
                    <a href="/task/1" class="_project--title">Task name</a>
                    <div class="_project--short-description">
                        <p class="small">Short description ... A little more description</p>
                    </div>
                </div>

                <div class="_project--add-task _obj--table">
                    <div class="_obj--table-cell">
                        <input type="text" name="task" class="form-control">
                    </div>
                    <div class="_obj--table-cell">
                        <input type="button" name="submit" value="Add" class="form-control">
                    </div>
                </div>
            </div>
        </div>




        <div class="col-sm-4">
            <div class="_project--list-title">List title</div>
            <div class="_project--list">
                <div class="_project--task">
                    <a href="/task/1" class="_project--title">Task name</a>
                    <div class="_project--short-description">
                        <p class="small">Short description ... A little more description</p>
                    </div>
                </div>

                <div class="_project--add-task _obj--table">
                    <div class="_obj--table-cell">
                        <input type="text" name="task" class="form-control">
                    </div>
                    <div class="_obj--table-cell">
                        <input type="button" name="submit" value="Add" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection