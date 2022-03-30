<template>
<section title="Novo-abastecimento" class="invoice-add-wrapper">
    <b-row>
        <b-col cols="12" class="invoice-add">

            <b-form @submit.prevent="NovaOrdem()" @reset="onReset" @keydown="form.onKeydown($event)">
                <b-card no-body class="invoice-preview-card p-2">
                    <b-row>
                        <b-col md="6" xl="6">
                            <b-form-group label="Nova Ordem de Abastecimento">

                            </b-form-group>
                        </b-col>
                    </b-row>
                    <b-row>
                        <!-- basic select -->
                        <b-col md="6" xl="3">
                            <b-form-group label="Selecionar projecto base">
                                <v-select v-model="form.projecto_id" label="name" :options="projecto.data" :reduce="(projecto) => projecto.id" />
                                <small class=" alert text-danger" v-if="form.errors.has('projecto_id')" v-html="form.errors.get( 'projecto_id')"></small>
                            </b-form-group>
                        </b-col>
                        <b-col md="6" xl="3">
                            <b-form-group label="Selecionar matricula da viatura">
                                <v-select label="matricula" v-model="form.viatura_id" :options="viatura" :reduce="(viatura) => viatura.id" @input="getQtd" />
                                <small class=" alert text-danger" v-if="form.errors.has('viatura_id')" v-html="form.errors.get( 'viatura_id')"></small>
                            </b-form-group>
                        </b-col>
                        <b-col md="6" xl="3">
                            <b-form-group label="Selecionar a bomba">
                                <v-select v-model="form.bombas_id" label="nome_bombas" :options="bombas" :reduce="(bombas) => bombas.id"></v-select>
                                <small class=" alert text-danger" v-if="form.errors.has('bombas_id')" v-html="form.errors.get( 'bombas_id')"></small>
                            </b-form-group>
                        </b-col>
                        <b-col md="6" xl="3">
                            <!-- with helper text -->
                            <b-form-group label="Ultimo abastecimento" label-for="Qtd em litros" description="Quantidade combustivel do ultimo abastecimento">
                                <b-form-input type="number" v-model="rec_abast" placeholder="Qtd em litros" readonly />

                            </b-form-group>
                        </b-col>

                    </b-row>
                    <b-row>
                        <b-col cols="12" md="12" xl="12">
                            <b-card-body class="invoice-padding form-item-section">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-stripped">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="text-danger">
                                                    <i class="fas fa-remove"></i>
                                                </th>
                                                <th>Rota</th>
                                                <th>Qtd(<small class="text-lowercase">ltr</small>)</th>
                                                <th>Turno(manh&atilde;/tarde)</th>
                                                <th>Justifica&ccedil;ao</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(abs, index) in form.abastecer" :key="index">
                                                <td>
                                                    <span class="btn btn-sm btn-outline-danger" v-on:click="rmRow(index)">
                                                        <i class="fas fa-trash"></i>
                                                    </span>

                                                </td>
                                                <td style="width:30%">
                                                    <v-select v-model="abs.rota_id" label="nome_rota" :options="rota" :reduce="(rota)=>rota.id" />

                                                </td>
                                                <td>
                                                    <b-form-input type="number" v-model="abs.qtd_abastecer" placeholder="Qtd em litros" />

                                                </td>
                                                <td>
                                                    <v-select :options="['manh&atilde;','tarde']" v-model="abs.turno"></v-select>

                                                </td>
                                                <td>
                                                    <b-form-input type="text" v-model="abs.observacao" placeholder="Razoes de abastecimento" />
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="5" class="content-align-right">
                                                    <span class="btn btn-outline-primary btn-sm" v-on:click="add()">
                                                        <i class="fas fa-plus"></i>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </b-card-body>

                        </b-col>
                    </b-row>
                    <b-row>
                        <b-col cols="10">
                            <b-button type="reset" variant="secondary">limpar campos</b-button>
                        </b-col>
                        <b-col cols="2" class="pull-right float-right">
                            <b-button type="submit" variant="outline-success">enviar</b-button>

                        </b-col>
                    </b-row>
                </b-card>
            </b-form>

        </b-col>

    </b-row>
</section>
</template>

<script>
import {
    BCard,
    BCardTitle,
    BCardSubTitle,
    BCardBody,
    BCollapse,
    BCardHeader,
    BRow,
    BCol,
    BButton,
    BModal,
    BFormRow,
    BFormInput,
    BForm,
    BFormText,
    BFormGroup,
    BLink,
    BBadge,
    BFormTextarea
} from "bootstrap-vue-3";
import vSelect from "vue-select";
import {
    Form
} from "vform";
// import useAbastecimentpConfigs from './../AbastacimentoTableConfigs'
export default {
    name: 'Novo_abastecimento',
    data() {

        return {
            viatura: [],
            rota: [],
            projecto: {
                data: []
            },
            rec_abast: null,
            bombas: [],
            form: new Form({
                viatura_id: null,
                bombas_id: null,
                projecto_id: null,
                abastecer: [{
                    rota_id: null,
                    qtd_abastecer: 0,
                    observacao: null
                }]
            })

        }
    },
    components: {
        BCollapse,
        BCardSubTitle,
        BCardTitle,
        BRow,
        BCol,
        BCard,
        BCardHeader,
        BCardBody,
        vSelect,
        BFormGroup,
        BButton,
        BModal,
        BFormRow,
        BFormInput,
        BForm,
        BFormText,
        BLink,
        BBadge,
        BFormTextarea
    },
    created() {
        this.fetchProjectos()
        this.fetchRotas()
        this.fetchViaturas()
        this.fetchBombas()
        // single data
        // this.getQtd()
    },
    methods: {
        add() {
            this.form.abastecer.push({
                rota_id: null,
                qtd_abastecer: 0,
                observacao: null
            })
        },
        rmRow(index) {
            this.form.abastecer.splice(index, 1);
        },
        getQtd(a) {
            let viatura_id = a
            alert(viatura_id)
            // axios.get(`/auth/getQtdDisponivel/${viatura_id}`).then((res) => {
            //     this.rec_abast = res.data
            // })
        },
        fetchProjectos() {
            this.$http.get(`https://clientes.pfuxela.co.mz/api/allProjects`).then((response) => {
                this.projecto = response.data
                // console.log(this.projecto.data)
            }).catch((err) => {
                console.log(err)
            });
        },

        fetchRotas() {
            this.$http.get(`auth/todasRotas`).then((res) => {
                this.rota = res.data
            })
        },
        fetchBombas() {
            this.$http.get('/auth/bombas').then((res) => {
                this.bombas = res.data
            })
        },
        fetchViaturas() {
            this.$http.get('/auth/listarViaturas').then((res) => {
                this.viatura = res.data
            })
        },
        NovaOrdem() {
            this.$Progress.start()
            this.form.post('/auth/Abastecimento').then((res) => {
                this.$Progress.finish()
                 this.$router.push({
                    name: "Abastecimentos"
                });
                this.form.reset();

            }).catch((err) =>{
                 this.$swal.fire({
                    icon: "error",
                    title: "Erro ao tentar adicionar!",
                });
                this.$Progress.fail();
            })
        },
        onReset(event) {
            event.preventDefault();
            // Reset our form values
            this.form.reset();
            // Trick to reset/clear native browser form validation state
            this.show = false;
            this.$nextTick(() => {
                this.show = true;
            });
        },
    },
}
</script>
