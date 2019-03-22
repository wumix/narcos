@extends('layouts.basic')

@section('page')
<h3 class="page-title"><span aria-hidden="true" class="li_truck"></span> {{ __('Narcotics trade') }}</h3>
<p>
    Smuggling narcotics into other countries can be a lucrative business. Buy low and sell high, be sure to ask around for the current drugroute
    (changes every 24hrs). Your rank determines how much kilograms you can carry.
</p>
<p>
    <b>You can carry:</b> 2kg
</p>
<table class="table table-sm table-dark">
    <thead>
        <tr>
            <th colspan="4">{{ __('Narcotics') }}</th>
        </tr>
        <tr class="bg-dark">
            <th>{{ __('Name') }}</th>
            <th>{{ __('Price per kg') }}</th>
            <th>{{ __('Trade') }}</th>
            <th>{{ __('Actions') }}</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($prices as $narcotic => $price)
        <tr>
            <td>
                <b>{{ ucfirst($narcotic) }}</b>
            </td>
            <td>
                &euro;{{ $price }},-
            </td>
            <td>
                <div class="form-group input-group-sm mb-0">
                    <input id="buysell" type="number" class="form-control{{ $errors->has('buysell') ? ' is-invalid' : '' }} w-50" name="buysell" value="{{ old('buysell') }}" placeholder="Amount (e.g. 1)" required autofocus>
                    @if ($errors->has('buysell'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('buysell') }}</strong>
                        </span>
                    @endif
                </div>
            </td>
            <td class="cell-fit">
                <button class="btn btn-link">Buy</button><button class="btn btn-link">Sell</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection