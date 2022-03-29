<template>
<section>
    <div class="card" no-body>

        <div class="m-2">
            <!-- Table Top -->
            <div class="row">
                <!-- Per Page -->

                <!-- Search -->
                <div class="col-6 col-sm-5" >
                    <div class="d-flex align-items-center justify-content-end">
                        <input v-model="searchQuery" class="form-control d-inline-block mr-1" placeholder="pesquisar..." />
                    </div>
                </div>
                <div class="col-6 col-sm-5" >

                    <router-link :to="{ name: 'Novo_abastecimento'}" class="btn btn-sm btn-link font-weight-bold">
                        Novo abastecimento
                    </router-link>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 table-responsive">
                <table class="table table-striped table-bordered table-inverse">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>refs</th>
                            <th>Data de abastecimento</th>
                            <th>Viatura</th>
                            <th>Qtd anterior</th>
                            <th>Qtd abastecida</th>
                            <th>
                                Bomba
                            </th>
                            <th>
                                <i class="fas fa-cogs"></i>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(abs, index) in abastecimentos.data" :key="abs.id">
                            <td>{{index+1}}</td>
                            <td>{{abs.refs}}</td>
                            <td>{{moment(abs.created_at).format('DD.MM.YYYY [&nbsp;] HH:mm:ss')}}</td>
                            <td>{{abs.viatura.matricula}}</td>
                            <td>{{abs.qtd_ant}}</td>
                            <td>{{abs.qtd_rec}}</td>
                            <td>{{abs.ordem.bombas.nome_bombas}}</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>
</template>

<script>

import vSelect from "vue-select";
import {
    Form
} from "vform";
// import useAbastecimentpConfigs from './../AbastacimentoTableConfigs'
import moment from "moment";
export default {
    data() {
        return {
            abastecimentos: [],
            bombas: {},
            searchQuery: null,
            form: new Form({

            }),
            moment: moment
        }
    },
    components: {
        vSelect,
    },
    created() {
        let page = 1
        // this.$http.get(`/admin/Abastecimento?page=${page}`).then((res) => {
        //     this.abastecimentos = res.data
        // })
        this.moment = moment;
    }
}
</script>
