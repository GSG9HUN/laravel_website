<script src="{{asset('js/input_range_value.js')}}"></script>
<div class="sidebar-left">
    <div class="inside-sidebar-left">

        <div class="filter-container">
            <div class="left_sidebar-spacer"></div>
            <form method="Post" action="{{route('detailed.search')}}">
                @csrf
            <div class="price">
                <h3>Ár</h3>
                <div class="range-slider">
                    <input  id = "input" name="max_value" class="range-slider__range" type="range" min="{{\App\Item::getMin()}}" max="{{\App\Item::getMax()}}">
                    <p class="values">{{\App\Item::getMin()}} Ft -
                        <span name ="max_value"  id="output"></span> Ft</p>
                </div>
            </div>
            <div class="order">
                <h3>Rendezés</h3>
                <table>
                    <tbody>
                    <tr>
                        <td>
                            <label>
                                Ár szerint csökkenő
                            </label>
                        </td>
                        <td class="checkboxtd">
                            <input id="1" name="order_1" onclick="selectOnlyThis(this.id)" type="checkbox">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Ár szerint növekvő
                            </label>
                        </td>
                        <td class="checkboxtd">
                            <input  id="2" name="order_2" onclick="selectOnlyThis(this.id)" type="checkbox">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Név szerint csökkenő
                            </label>
                        </td>
                        <td class="checkboxtd">
                            <input id="3" name="order_3" onclick="selectOnlyThis(this.id)" type="checkbox">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Név szerint növekvő
                            </label>
                        </td>
                        <td class="checkboxtd">
                            <input id="4" name="order_4" onclick="selectOnlyThis(this.id)" type="checkbox">
                        </td>
                    </tr>
                    </tbody>

                </table>


            </div>
            <div class="col text-center">
                <button type="submit">Search</button>
            </div>
            </form>




            </div>
        </div>
    </div>
</div>

