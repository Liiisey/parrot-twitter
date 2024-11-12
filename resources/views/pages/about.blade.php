@extends('layouts.master-layout')

@section('about-content')
<div class="second-column scrollable-column pt-3 col-md-8 mx-auto">
    <div class="container">
        <div class="card">
            <div class="card-body back-section">
                <a href="/home" class="nav-link">
                    <div class="back-arrow">
                        <i data-feather="arrow-left"></i>
                    </div>
                </a>
                <div class="back-arrow-text">
                    back to Squawker 🦜
                </div>
            </div>

            <div class="card-body">
                <div class="container">
                    <h5 class="card-title">Welcome to Squawker, an another twitter clone</h5>
                    <h6 class="card-subtitle mb-2 text-muted">A side project to play with Laravel and blade</h6>

                    <table class="table table-striped mt-5" style="width: 50%">
                        <tbody>
                        <tr>
                            <th scope="row">Laravel</th>
                            <td>v 10.10</td>
                        </tr>
                        <tr>
                            <th scope="row">Bootstrap</th>
                            <td>v 5.2.3</td>
                        </tr>
                        <tr>
                            <th scope="row">Sass</th>
                            <td>v 1.56.1</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <a href="https://feathericons.com/" class="nav-link target-blank-icon" target="_blank">
                                    Feather icons
                                </a>
                            </th>
                            <td>v 4.29.2</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
