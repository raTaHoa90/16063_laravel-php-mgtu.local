@extends('admin.base_template')

@push('head')
    <script src="/js/admin/products.js"></script>
@endpush

@section('content')
    <section>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Имя</th>
                    <th>Тип листа</th>
                    <th>Размер списка</th>
                    <th>
                        <i class="fa fa-cog"></i>
                        <a class="btn btn-success" style="float:right" href="/admin/products/create"><i class="fa fa-plus"></i></a>
                    </th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

            </tbody>
        </table>
    </section>
@endsection
