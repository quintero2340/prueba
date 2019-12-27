@extends('layout')
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">{{"$user->first_name"." "."$user->last_name"}}</a>
</nav>
<hr>
<div class="card text-white bg-info mb-3" >
  <div class="card-header">Category List</div>
  <div class="card-body">
  <table class="table table-hover">
      <tbody>
        <tr>
          <td>
          <div class="list-group">
          <div class="card text-white bg-info mb-3" >
  <div class="card-header">Category List</div>
  <div class="card-body"></div>
            <a href="#" class="list-group-item list-group-item-action ">categoria 0</a>
            <a href="#" class="list-group-item list-group-item-action">categoria 1</a>
            <a href="#" class="list-group-item list-group-item-action">categoria 2</a>
            <a href="#" class="list-group-item list-group-item-action">categoria 3</a>
            </div>
          </td>
  </div>
</div>