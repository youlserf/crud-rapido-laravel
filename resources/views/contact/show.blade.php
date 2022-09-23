@extends('layouts.app')

@section('template_title')
    {{ $contact->name ?? 'Show Contact' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Contact</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contacts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $contact->name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $contact->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $contact->description }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $contact->email }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $contact->phone }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
