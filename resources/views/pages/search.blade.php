@include('layout.header')
<h1 class="mt-10">Résultats de la recherche</h1>

<div class="properties-container container">
    @foreach($houses as $house)
        <div class="box">
            <img src="/storage/{{$house->image}}" alt="#">
            <h3>${{ $house->price}}</h3>
            <div class="content">
                <div class="text">
                    <h3>{{ $house->name }}</h3>
                    <p>{{ $house->address }}</p>
                </div>
                <div class="icon">
                    <i class="bx bx-bed"><span>{{ $house->rooms }}</span></i>
                    <i class="bx bx-bath"><span>{{ $house->bathrooms }}</span></i>
                </div>
            </div>
        </div>
    @endforeach


    {{--            {{ $houses->links() }}--}}


</div>
