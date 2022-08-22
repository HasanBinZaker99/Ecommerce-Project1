<template>
    <div>
       <div class="form-group row">
          <label class="col-md-2 col-form-label">Subject</label>
          <div class="col-md-5">
            <input
              type="text"
              class="form-control"
              v-model="subject"
              required
              name="subject"
            />
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2 col-form-label">Body</label>
          <div class="col-md-10">
            <textarea
              class="form-control"
              v-model="body"
              required
              name="body"
            ></textarea>
          </div>
        </div>
        <hr />
        <div v-for="(tab, tabIndex) in tabs" :key="tab.id">
            <div class="col-md-4 offset-md-4 d-flex">
                <label>HouseAreaTypes</label>
            </div>
            <div class="col-md-4 offset-md-4 d-flex">
                <select
                    v-model="tab.selectedHouseType"
                    @change="getDecor(tabIndex)"
                    class="form-control select2"
                    id="houseType1"
                    required
                    name="houseAreaTypeId[][id]"
                >
                    <option
                        v-for="houseType in houseTypes"
                        :key="houseType.id"
                        :value="houseType.id"
                    >
                        {{ houseType.name }}
                    </option>
                </select>
                <div class="col-md-4">
                    <button v-if="tabIndex == Object.keys(tabs).length -1" class="btn btn-success btn-sm mt-2 ml-2" @click="addTab">
                        <i class="fa fa-plus"></i>
                    </button>
                    <button v-if="tabIndex > 0" class="btn btn-danger btn-sm mt-2 ml-2" @click="removeTab(tabIndex, tab)">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div v-for="(row, rowIndex) in tab.rows" :key="row.id">
                <table class="table table-borderless col-md-12">
                    <thead>
                    <th>DecorationType</th>
                    <th>Description</th>
                    <th class="col-md-2">Rate</th>
                    <th>Quantity</th>
                    <th class="col-md-2">TotalAmount</th>
                    <th class="col-md-2"></th>
                    </thead>
                    <tbody>
                    <td>
                        <select
                            v-model="row.selectedDecor"
                            @change="getDescription(tabIndex,rowIndex)"
                            class="form-control select2"
                            required
                            name="houseAreaTypeId[][houseAreaCartInfo[decId]]"
                        >
                            <option
                                selected
                                v-for="decorType in tab.decorTypes"
                                :key="decorType.id"
                                :value="decorType.id"
                            >
                                {{ decorType.name }}
                            </option>
                        </select>
                    </td>
                    <td class="col-md-3">
                        <input
                            class="form-control text-right"
                            type="text"
                            name="houseAreaTypeId[][houseAreaCartInfo[des]]"
                            v-model="row.selectedDes"
                        />
                    </td>
                    <td class="col-md-2">
                        <input
                            class="form-control text-right"
                            type="number"
                            min="0"
                            name="houseAreaTypeId[][houseAreaCartInfo[rate]]"
                            v-model="row.selectedRate"
                            @change="calculateLineTotal(tabIndex,rowIndex)"
                        />
                    </td>
                    <td class="col-md-1">
                        <input
                            class="form-control text-right"
                            type="number"
                            min="0"
                            name="houseAreaTypeId[][houseAreaCartInfo[qty]]"
                            v-model="row.selectedQty"
                            @change="calculateLineTotal(tabIndex,rowIndex)"
                        />
                    </td>
                    <td class="col-md-3">
                        <input
                            readonly
                            class="form-control text-right"
                            type="number"
                            min="0"
                            step=".01"
                            name="houseAreaTypeId[][houseAreaCartInfo[totalAmount]]"
                            v-model="row.line_total"
                        />
                    </td>
                    <td>
                        <button  v-if="rowIndex == Object.keys(tab.rows).length -1" type="button" class="btn btn-success btn-sm mt-2 ml-2" @click="addRow(tabIndex)">
                            <i class="fa fa-plus"></i>
                        </button>
                        <button  type="button"
                                 v-if="rowIndex > 0"
                                 class="btn btn-danger btn-sm mt-2 mx-2"
                                 @click="removeRow(rowIndex, row,tabIndex)">
                            <i class="fa fa-minus"></i>
                        </button>
                    </td>
                    </tbody>
                </table>
                <hr />
            </div>
        </div>
        <div class="col-md-6 float-right px-0">
            <div class="form-group row">
                <label class="col-md-3 col-form-label">All TotalAmount</label>
                <div class="col-md-9">
                    <input
                        readonly
                        type="number"
                        class="form-control"
                        required
                        name="subtotal"
                        v-model="allTotal"
                    />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Vat%</label>
                <div class="col-md-3">
                    <input
                        type="number"
                        class="form-control"
                        required
                        name="vat"
                        v-model="vat"
                        @change="calculateTotal(tabIndex)"
                    />
                </div>
                <label class="col-md-1 col-form-label">Vat</label>
                <div class="col-md-5">
                    <input
                        readonly
                        type="number"
                        class="form-control"
                        name="vatC"
                        v-model="vatC"
                        @change="calculateTotal(tabIndex)"
                    />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Grand Total</label>
                <div class="col-md-9">
                    <input
                        readonly
                        type="number"
                        class="form-control"
                        required
                        name="total"
                        v-model="total"
                    />
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7 float-right">
        <input type="submit" class="btn btn-success">
    </div>
</template>

<script type="module">
    export default {
        data() {
            return {
                tabs: [{
                    selectedHouseType: "",
                    decorTypes: {},
                    rows: [{
                        selectedDecor: "",
                        selectedDes: "",
                        selectedQty: "",
                        selectedRate: "",
                        line_total: 0,
                        descriptions: {},
                    }],
                }],
                subtotal: 0,
                allTotal: 0,
                total: 0,
                vatC: 0,
                vat: 0,
                tabCounter: 0,
                houseTypes: {},
                subject: {},
                body: {},
            };
        },

        methods: {
            addRow(tabIndex) {
                this.tabs[tabIndex].rows.push({
                    selectedDecor: "",
                    selectedDes: "",
                    selectedQty: "",
                    selectedRate: "",
                    line_total: 0,
                });
                localStorage.setItem("rows", JSON.stringify(this.rows));
            },
            addTab() {
                this.tabs.push({
                    selectedHouseType: "",
                    decorTypes: {},
                    rows: [
                        {
                            selectedDecor: "",
                            selectedDes: "",
                            selectedQty: "",
                            selectedRate: "",
                            line_total: 0,
                            descriptions: {},
                        },
                    ],
                });
                localStorage.setItem("tabs", JSON.stringify(this.tabs));
            },

            getDecor(tabIndex) {
                axios
                    .get("/api/decorTypes", {
                        params: {
                            houseAreaTypeId: this.tabs[tabIndex].selectedHouseType,
                        },
                    })
                    .then(
                        function (response) {
                            console.log(response.data);
                            this.tabs[tabIndex].decorTypes = response.data;
                        }.bind(this)
                    );
            },
            getDescription(tabIndex,rowIndex) {
                axios
                    .get("/api/description", {
                        params: {
                            id: this.tabs[tabIndex].rows[rowIndex].selectedDecor,
                        },
                    })
                    .then(
                        function (response) {
                            console.log(response.data);
                            this.tabs[tabIndex].rows[rowIndex].descriptions = response.data;
                            // console.log(response.data[0].rate);
                            this.tabs[tabIndex].rows[rowIndex].selectedRate =
                                response.data[0].rate;
                            this.tabs[tabIndex].rows[rowIndex].selectedDes =
                                response.data[0].description;
                        }.bind(this)
                    );
            },
            getHouseTypes() {
                axios.get("/api/houseTypes").then((response) => {
                    this.houseTypes = response.data;
                });
            },
            getSub() {
                axios.get("/api/sub").then((response) => {
                    this.subject = response.data.subject;
                    this.body = response.data.body;
                });
            },
            calculateLineTotal(tabIndex,rowIndex) {
                var total =
                    parseFloat(this.tabs[tabIndex].rows[rowIndex].selectedRate) *
                    parseFloat(this.tabs[tabIndex].rows[rowIndex].selectedQty);
                if (!isNaN(total)) {
                    this.tabs[tabIndex].rows[rowIndex].line_total = total.toFixed(2);
                }
                this.calculateTotal();
            },
            calculateTotal(tabIndex,rowIndex) {
                var subtotal=0;
                var allTotal=0;
                var total, vatC;
                for (let tabIndex = 0; tabIndex < this.tabs.length; tabIndex++) {
                    subtotal = this.tabs[tabIndex].rows.reduce(function (sum, product) {
                        var lineTotal = parseFloat(product.line_total);
                        if (!isNaN(lineTotal)) {
                            return sum + lineTotal;
                        }

                    }, 0);
                    allTotal += subtotal;
                    console.log(tabIndex,subtotal);
                    //or if you pass float numbers , use parseFloat()
                }
                console.log(allTotal);
                this.allTotal = allTotal.toFixed(2);
                total = allTotal * (this.vat / 100) + allTotal;
                total = parseFloat(total);
                if (!isNaN(total)) {
                    this.total = total.toFixed(2);
                } else {
                    this.total = "0.00";
                }
                vatC  = allTotal * (this.vat / 100);
                vatC = parseFloat(vatC);
                if (!isNaN(vatC)) {
                    this.vatC = vatC.toFixed(2);
                } else {
                    this.vatC = "0.00";
                }
            },

            removeRow(rowIndex, row,tabIndex) {
                var idx = this.tabs[tabIndex].rows.indexOf(row);
                console.log(idx, rowIndex);
                if (rowIndex != 0) {
                    this.tabs[tabIndex].rows.splice(idx, 1);
                    localStorage.setItem("rows", JSON.stringify(this.rows));
                }
            },
            removeTab(index, tab) {
                var idx = this.tabs.indexOf(tab);
                console.log(idx, index);
                if (index != 0) {
                    this.tabs.splice(idx, 1);
                    localStorage.setItem("tabs", JSON.stringify(this.tabs));
                }
                this.calculateTotal();
            },
            getTabs() {
                this.tabs = JSON.parse(localStorage.getItem("tabs"));
            },
        },
          watch: {
            tabs: {
              handler() {
                localStorage.setItem("tabs", JSON.stringify(this.tabs));
              },
              deep: true,
            },
          },
        mounted() {
            this.getHouseTypes();
            if (localStorage.getItem("tabs")) {
              this.getTabs();
            }
            this.getSub();
            this.calculateTotal();
        },
    };
</script>

<style scoped>
</style>
