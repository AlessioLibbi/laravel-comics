@extends('layouts.app')

@section('content')
   <template>
    <div class="content-box">
        <div class="jumbo">
            <img class="jumbo-img" src="" alt="">
        </div>
        <h3>CURRENT SERIES</h3>

        <div class="content-container">
             <div class="row row-cols-4 g-3">
                @foreach ($card as $single_card)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $single_card['thumb'] }}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $single_card['series'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <button>LOAD MORE</button>
    </div>
</template>

<style scoped lang="scss">
 

.content-box {
    background-color: #1C1C1C;
    position: relative;
    padding-bottom: 30px;

    .jumbo {
        .jumbo-img {
            width: 100%;
            object-fit: cover;
            height: 400px;
            object-position: 0 0;
        }
    }

    h3 {
        /* background-color: $primary; */
        padding: 15px;
        color: white;
        position: absolute;
        top: 370px;
        left: 150px
    }

    .content-container {
        /* @include flex(row, space-between, center); */
        flex-wrap: wrap;
        margin: 0 auto;
        /* width: $width; */
        position: relative;
        padding-top: 50px
    }

    button {
        /* @include flex(row, center, center); */
        padding: 10px 50px;
        margin: 0 auto;
        color: white;
        font-weight: 700;
        /* background-color: $primary; */
    }
}
</style>
@endsection