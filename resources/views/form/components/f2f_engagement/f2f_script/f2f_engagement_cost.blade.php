<script>
     var ecsaleNum = 1;
    $(document).ready(function() {
        $("#addButton").on("click", function() {
            $("#tableofSale").append(
                `<tr class="" id="rowofSale${++ecsaleNum}">
                            <td class="title">Sales (4% / 5% / 6% / 7%)</td>
                            <td></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="inputforSale" style="display: none;"
                                onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                maxlength="5" disabled>
                            </td>
                            <td></td>
                            <td></td>
                            <td class="total-td tbl-engmt-cost">
                                <h4 class="text-center" id="ec_saleTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
                            </td>
                            <td><a href="javascript:void(0)" class="text-success font-18" title="Add" id="ecaddButton"><i
                                class="fa fa-plus"></i></a>
                            </td>
                </tr>`);

            const ecsaleId = document.querySelectorAll("#ec_sale");
            for (let i = 0; i < ecsaleId.length; i++) {
                ecsaleId[i].value = "0";
            }

            if (ecsaleNum > 1) {
                document.getElementById("dropdownforSale").style.display =
                    "none"; 
                document.getElementById("inputforSale").style.display =
                    ""; 
                document.getElementById("inputforSale").disabled =
                    false;
            
            }
        });

        $("#tableofSale").on("click", ".remove", function() {
            var child = $(this).closest("tr").nextAll();

            $(this).closest("tr").remove();

            ecsaleNum--;
            if (ecsaleNum == 1) {
                document.getElementById("inputforSale").style.display = "none";
                document.getElementById("ec_sale").value = "0";
                document.getElementById("dropdownforSale").style.display = "";
                document.getElementById("inputforSale").value = ""; 
            }

        });

    });

</script>