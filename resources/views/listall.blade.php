@extends('layout')
@section('content')
    <div class="container">
    <table class="table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Anniversary</th>
            <th>Home Number</th>
            <th>Cell Number</th>
            <th>Address</th>
            <th>Facebook ID</th>
            <th>Twitter ID</th>
            <th>Notes</th>
        </tr>
        @foreach($candidates as $candidate)
            <tr>
                <td>{{$candidate->fname}}</td>
                <td>{{$candidate->lname}}</td>
                <td>{{$candidate->email}}</td>
                <td>{{$candidate->dob->toDateString()}}</td>
                <td>{{$candidate->anniversary->toDateString()}}</td>
                <td>{{$candidate->home}}</td>
                <td>{{$candidate->cell}}</td>
                <td>{{$candidate->address}}</td>
                <td>{{$candidate->facebookID}}</td>
                <td>{{$candidate->TwitterID}}</td>
                <td>{{$candidate->notes}}</td>
            </tr>
        @endforeach
    </table>
    </div>
    @stop
