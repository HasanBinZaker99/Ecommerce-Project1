<template>
    <table class="table table-borderless col-md-12"  v-for="(index,k) in form" :key="k" >
        <thead>

        <th>HouseAreaType</th>
        <th>DecorationType</th>
        <th>Description</th>
        <th>Quantity</th>
        <th class="col-md-1">Rate</th>
        <th>TotalAmount</th>
        <th>Action</th>
        <th></th>
        </thead>
        <tbody>
        <td>
            <select v-model="form.selectedHouseType" @change="getDecorTypes()"  class="form-control select2" id="houseType1" required name="houseAreaTypeId">
                <option v-for="houseType in houseTypes" :key="houseType.id" :value="houseType.id">{{houseType.name}}</option>
            </select>
        </td>
        <td>
            <select v-model="form.selectedDecor" @change="getDescription()" class="form-control select2" required name="houseAreaCartInfo[decId]">
                <option selected v-for="decorType in decorTypes" :key="decorType.id" :value="decorType.id">{{decorType.name}}</option>
            </select>
        </td>
        <td>
            <select class="form-control form-select form-select-lg mb-3" v-model="form.selectedDes" name="houseAreaCartInfo[des]">
                <option v-for="des in description" :key="des.id" :value="des.description">{{des.description}}</option>
            </select>
        </td>
        <td>
            <input type="number" class="form-control form-select form-select-lg mb-3" v-model="form.selectedQty" name="houseAreaCartInfo[qty]">
        </td>
        <td>
            <select class="form-control form-select form-select-lg mb-3" id="rate" v-model="form.selectedRate" name="houseAreaCartInfo[rate]">
                <option v-for="des in description" :key="des.id" :value="des.rate">{{des.rate}}</option>
            </select>
        </td>
        <td>
            <input type="number" v-model="form.selectedTotalAmount" class="form-control form-select form-select-lg mb-3" name="houseAreaCartInfo[totalAmount]">
        </td>
        <td>
            <input type="submit" class="btn btn-success" value="Save"/>
        </td>
        <td>
            <input type="button" class="btn btn-success" value="Add More" @click="addRow"/>
        </td>
        <td>
            <input type="button" class="btn btn-danger" value="Remove" @click="removeRow(k,form)"/>
        </td>
        </tbody>
    </table>
</template>

<script>
    import { ref, onMounted } from 'vue';
    import { reactive } from 'vue';
    export default {

        name: "CreateCart",
        setup: function () {
            const form = reactive([
                {
                    selectedHouseType: '',
                    selectedDecor: '',
                    selectedDes: '',
                    selectedQty: '',
                    selectedRate: '',
                    selectedTotalAmount: ''
                }
            ])
            const addRow = () => {
                form.push({
                    selectedHouseType: '',
                    selectedDecor: '',
                    selectedDes: '',
                    selectedQty: '',
                    selectedRate: '',
                    selectedTotalAmount: ''
                })
            }
            const removeRow = (index, form) => {
                 var idx = this.form.indexOf(form);
            console.log(idx, index);
                this.form.splice(idx, 1);
            }
            const quotations = ref([]);
            const getQuotations = () => {
                axios.get('/api/quotations').then(response => (quotations.value = response.data));
            }

            const houseTypes = ref([]);
            const selectedHouseType = ref(1);
            const getHouseTypes = () => {
                axios.get('/api/houseTypes').then(response => (houseTypes.value = response.data));
            }

            const decorTypes = ref([]);
            const getDecorTypes = () => {
                axios.get('/api/houseTypes/' + selectedHouseType.value + '/decorTypes').then(response => (decorTypes.value = response.data));
            }

            const description = ref([]);
            const selectedDecor = ref(1);
            const getDescription = () => {
                axios.get('/api/decorType/' + selectedDecor.value + '/des')
                .then(response => (description.value = response.data));
            }

            onMounted(() => {
                getQuotations()
                getHouseTypes()
                getDecorTypes()
                getDescription()
            })
            return {
                quotations,
                houseTypes,
                decorTypes,
                description,
                getQuotations,
                getHouseTypes,
                getDecorTypes,
                getDescription,
                selectedDecor,
                selectedHouseType,
                addRow,
                removeRow,
                form
            }
        }
    }
</script>

<style scoped>

</style>
