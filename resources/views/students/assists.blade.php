@extends('students.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Asistencias.
                </div>
                <div class="float-end">
                    <a href="{{ route('student.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <label for="dni" class="col-md-4 col-form-label text-md-end text-start"><strong>DNI:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $student->alumn_DNI }}
                    </div>
                </div>

                <div class="row">
                    <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $student->nombre }}
                    </div>
                </div>

                <div class="row">
                    <label for="lastname" class="col-md-4 col-form-label text-md-end text-start"><strong>Last Name:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $student->apellido }}
                    </div>
                </div>

                <div class="row">
                    <label for="assists" class="col-md-4 col-form-label text-md-end text-start"><strong>Total absences:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $cant }}
                    </div>
                </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection