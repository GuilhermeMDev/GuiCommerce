<template>
    <div class="container">
        <div class="row justify-content-center red">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>

                    <div class="card-body">
                        <pre>{{ $props.user }}</pre>
                        <p> Nome: {{ computedData.name }} </p> <br>

                        <p> Apelido: {{ computedData.nickname }} </p>

                        <p> Apelido: {{ teste }} </p>
                    </div>

                    <div class="card-body">

                        {{ calcularTotal(this.$props.amount, this.$props.price) }}

                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: {
        user: {
            type: Object,
            default() {
                return {
                    name: 'teste',
                    nickname: 'teste1'
                }
            }
        },
        amount: {
            type: Number,
            default: 0
        },
        price: {
            type: Number,
            default: 0,

        }
    },

    data() { //Padrao do data sempre retorna um objeto
        return {
            teste: 'teste', //Deve sempre ter chave e valor
        }
    },

    //Guardar aqui as funçoes do componente
    methods: {
        calcularTotal(amount, price) {

            return new Intl.NumberFormat('pt-BR', {
                style: 'currency',
                currency: 'BRL'
            }).format(amount * price)

        }
    },

    computed: { //Propriedade computada: Variáve do componente que, atualiza em tempo real.
        computedData() {
            return JSON.parse(this.user)
        }
    },

    //hooks (momentos que o componente está), o JS le o componente e gera em modo visual.
    created() {

    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
