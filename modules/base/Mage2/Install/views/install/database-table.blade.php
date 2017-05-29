@extends('mage2install::layouts.install')
@section('content')

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome to Mage2 Installation</div>
                <div class="panel-body">

                    <h2 class="text-center">Database Table Setup</h2>

                    {!! Form::open(['id' => 'install-module-form','method' => 'post','route' => 'mage2.install.database.table.post']) !!}

                    <p>Click Continue to install Database</p>

                    <div class="col s12">
                        <button type="button" class="btn btn-primary install-new-button">Install Next</button>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
@push('scripts')
<script>

    jQuery(document).ready(function() {

        jQuery('.install-new-button').click(function (e) {

            //#install-module-form
            jQuery(this).button('loading');
            jQuery('#install-module-form').submit();
        }) ;

    });
</script>
@endpush


@endsection