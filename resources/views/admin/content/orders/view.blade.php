@extends('admin.master.master')

@section('content')
    {{-- <h5 class="pb-1 mb-4">Text alignment</h5> --}}
    <div class="row mb-5 text-center">
        <div class="col-md-12 col-lg-12">
            <div class="card mb-3">
                <div class="card-body">
                    @if ($order->first()->livreur_id)
                        Livreur {{ $order->first()->Livreur->full_name }}
                    @else
                        <div class="mb-3">
                            <label for="defaultSelect" class="form-label">Add Livreur</label>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-person-biking"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    @forelse (\App\Models\Livreur::all() as $item)
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ route('admin.order.AssignLivreurToOrder', [$order->first()->order_number, $item->id]) }}">{{ $item->full_name }}</a>
                                        </li>
                                    @empty
                                        <li>
                                            <a class="dropdown-item" href="#">No Livreur Found</a>
                                        </li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">order number : {{ $order->first()->order_number }}</h5>
                    <h5 class="card-title">total item : {{ $order->count('product') }}</h5>
                    <h5 class="card-title">delivery time : {{ $order->first()->delivery_time }}</h5>
                    <h5 class="card-title">order time : {{ $order->first()->delivery_date }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">frais de livraison : {{ $order->first()->charge_delivery }} DH</h5>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($order as $item)
                        @php
                            $total += $item->qty * $item->product->price;
                        @endphp
                    @endforeach
                    <h5 class="card-title">Total : @php echo $total @endphp </h5>
                    <h5 class="card-title">Grand Total : @php echo $total + $order->first()->charge_delivery; @endphp </h5>
                    <h5 class="cart-text">Payement Method : {{ $order->first()->payement_methode }} </h5>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Delivery Adresse</h5>
                    @if ($order->first()->adresse_id)
                        <h5 class="card-title">
                            {{ $order->first()->adresse_id ?? $order->first()->adresse->adresse || 'no adresse found' }}
                        </h5>
                    @else
                        <h5 class="card-title">no adresse found</h5>
                    @endif
                    {!! $order->first()->statue !!}
                    <div class="mb-3">
                        <label for="defaultSelect" class="form-label">Change statue</label>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa fa-gear" aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                        href="{{ route('admin.order.ChangeStatue', [1, $order->first()->order_number]) }}">confirm</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{ route('admin.order.ChangeStatue', [2, $order->first()->order_number]) }}">annuller</a>
                                </li>
                            </ul>
                        </div>
                        {{-- <select id="defaultSelect" onchange="f1()" class="form-select">
                            <option>Default select</option>
                            <option value="confirmed"><a
                                    href="{{ route('admin.order.ChangeStatue', ['statue', $order->first()->order_number]) }}">confirmed</a>
                            </option>
                            <option value="annuller">annuller</option>
                        </select> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Client <i class="fa fa-info" aria-hidden="true"></i></h5>
                    <h5 class="card-title">name :{{ $order->first()->User->FullName }}</h5>
                    <h5 class="card-title"><i class="fa fa-envelope-open" aria-hidden="true"></i>{{ $order->first()->User->email }}</h5>
                    <h5 class="card-title"><i class="fa fa-phone" aria-hidden="true"></i>{{ $order->first()->User->phone }}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <h1 class="card-header">
            Orders Number ({{ $order->first()->order_number }})
        </h1>
        <!-- /.card-header -->
        <div class="table-responsive text-nowrap">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th>OrdersNumber</th>
                        <th>image</th>
                        <th>product</th>
                        <th>price</th>
                        <th>qty</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order as $item)
                        <tr>
                            <td>{{ $item->order_number }}</td>
                            <td><img src="{{ $item->product->first_image }}" alt="" width="77px"
                                    style="border-radius: 25%"></td>
                            <td>{{ $item->product->title }}</td>
                            <td>{{ $item->product->price }}</td>
                            <td>{{ $item->qty }}</td>
                            <td>{{ $item->qty * $item->product->price }} DH</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer clearfix">
        {{ $products->links() }}
    </div> --}}
    </div>
@endsection

@section('scripts')
    <script>
        function f1() {
            statue = document.getElementById('defaultSelect').value;
            order_number = {{ $order->first()->order_number }}
            link = "admin/ChangeStatue/" + statue + "/" + order_number
            window.location(link);
        }
    </script>
@endsection
