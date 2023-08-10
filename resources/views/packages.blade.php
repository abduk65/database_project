@extends('layouts.app')

@section('content')
    <section class="price-part" style="margin-top: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Packages For Business Leads</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit
                            aspernatur illum vel sunt libero voluptatum repudiandae veniam
                            maxime tenetur.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($packages as $package)
                    <div class="col-md-6 col-lg-6">
                        <div class="price-card">
                            <div class="price-head">
                                <i class="flaticon-bicycle"></i>
                                <h3>${{ $package->price }}</h3>
                                <h4>{{ $package->name }}</h4>
                            </div>
                            <ul class="price-list">
                                <li>
                                    <i class="fas fa-plus"></i>
                                    <p>{{ $package->unlimited ? 'Unlimited' : $package->allowed_count . ' amount of records accessible' }}
                                    </p>
                                </li>
                                <li>
                                    <i class="fas fa-times"></i>
                                    <p>{{ $package->unlimited ? 'Download and save the Files in different format' : 'Download is not accessible' }}
                                    </p>
                                </li>
                                <li>
                                    <i class="fas fa-times"></i>
                                    <p>{{ $package->unlimited ? 'Life Time Access' : 'Only Accessible for ' . $package->valid_duration . ' days' }}
                                    </p>
                                </li>
                                <li>
                                    <i class="fas fa-times"></i>
                                    <p>{{ $package->unlimited ? 'Search results fully accessible' : 'search results are limited' }}
                                    </p>
                                </li>
                                <li>
                                    <i class="fas fa-plus"></i>
                                    <p>{{ $package->unlimited ? 'Notified when data gets updated update' : "Doesn\'t get notification after update " }}
                                    </p>
                                </li>
                            </ul>
                            <div class="price-btn">
                                <form action="{{ route('checkout') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="package_id" value="{{ $package->id }}">
                                    <button type="submit" class="btn btn-primary">Subscribe</button>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
