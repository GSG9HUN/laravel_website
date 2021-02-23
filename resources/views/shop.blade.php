@extends('layouts.layout')

@section('content')


    <div class="special-wrapper">
        <div class="current-item">
            <div class="img">
                <img src="../{{$item->image}}"  >
            </div>

            <div class="product-name">{{$item->name}}</div>
            <div class="product-price">{{$item->presentPrice()}}</div>
            @include('add_to_cart')

        </div>
        <div class="details_container" >
            <h2>Details</h2>
            @if($item->category=="RAM")
                <table>
                    <tbody>
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            {{$item->name}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Category
                        </td>
                        <td>
                            {{$item->category}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Brand
                        </td>
                        <td>
                            {{$item->brand}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Frequency
                        </td>
                        <td>
                            {{$item->frequency}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Memory Type
                        </td>
                        <td>
                            {{$item->memory_type}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Capacity
                        </td>
                        <td>
                            {{$item->capacity}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Price
                        </td>
                        <td>
                            {{$item->price}} Ft
                        </td>
                    </tr>

                    </tbody>
                </table>
            @elseif($item->category=="Processor")
                <table>
                    <tbody>
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            {{$item->name}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Category
                        </td>
                        <td>
                            {{$item->category}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Brand
                        </td>
                        <td>
                            {{$item->brand}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Frequency
                        </td>
                        <td>
                            {{$item->frequency}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Turbo
                        </td>
                        <td>
                            {{$item->turbo}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Core
                        </td>
                        <td>
                            {{$item->core}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Thread
                        </td>
                        <td>
                            {{$item->thread}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Socket
                        </td>
                        <td>
                            {{$item->socket}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Cache
                        </td>
                        <td>
                            {{$item->cache}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Price
                        </td>
                        <td>
                            {{$item->price}} Ft
                        </td>
                    </tr>

                    </tbody>
                </table>
            @elseif($item->category=="Video Card")
                <table>
                    <tbody>
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            {{$item->name}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Category
                        </td>
                        <td>
                            {{$item->category}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Brand
                        </td>
                        <td>
                            {{$item->brand}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Type
                        </td>
                        <td>
                            {{$item->type}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Maximum Resolution
                        </td>
                        <td>
                            {{$item->max_resolution}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Slot
                        </td>
                        <td>
                            {{$item->slot}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Series
                        </td>
                        <td>
                            {{$item->series}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Manufacturer
                        </td>
                        <td>
                            {{$item->manufacturer}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Memory type
                        </td>
                        <td>
                            {{$item->memory_type}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Capacity
                        </td>
                        <td>
                            {{$item->capacity}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Frequency
                        </td>
                        <td>
                            {{$item->frequency}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            DisplayPort
                        </td>
                        <td>
                            {{$item->DisplayPort}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            DVI
                        </td>
                        <td>
                            {{$item->DVI}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            HDMI
                        </td>
                        <td>
                            {{$item->HDMI}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Price
                        </td>
                        <td>
                            {{$item->price}} Ft
                        </td>
                    </tr>

                    </tbody>
                </table>
            @elseif($item->category=="Motherboard")
                <table>
                    <tbody>
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            {{$item->name}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Category
                        </td>
                        <td>
                            {{$item->category}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Brand
                        </td>
                        <td>
                            {{$item->brand}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            CPU Slot
                        </td>
                        <td>
                            {{$item->cpu_slot}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Chipset
                        </td>
                        <td>
                            {{$item->chipset}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Supported processors
                        </td>
                        <td>
                            {{$item->sup_proc}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Memory type
                        </td>
                        <td>
                            {{$item->memory_type}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Memory capacity
                        </td>
                        <td>
                            {{$item->capacity}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Frequency
                        </td>
                        <td>
                            {{$item->frequency}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Dual channel
                        </td>
                        <td>
                            @if($item->dual_channel)
                                Igen
                            @else
                                Nem
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Memory slots
                        </td>
                        <td>
                            {{$item->memory_slots}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Video slot
                        </td>
                        <td>
                            {{$item->video_slot}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Price
                        </td>
                        <td>
                            {{$item->price}} Ft
                        </td>
                    </tr>

                    </tbody>
                </table>
            @elseif($item->category=="Hard disk")
                <table>
                    <tbody>
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            {{$item->name}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Category
                        </td>
                        <td>
                            {{$item->category}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Brand
                        </td>
                        <td>
                            {{$item->brand}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Frequency
                        </td>
                        <td>
                            {{$item->frequency}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Memory Type
                        </td>
                        <td>
                            {{$item->memory_type}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Capacity
                        </td>
                        <td>
                            {{$item->capacity}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Price
                        </td>
                        <td>
                            {{$item->price}} Ft
                        </td>
                    </tr>

                    </tbody>
                </table>
            @endif

        </div>
    </div>


@endsection
