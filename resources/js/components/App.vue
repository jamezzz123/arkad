<template>
    <div>
         <mast></mast>
         <main class="main container">
            <div class="income">
            <input v-if="toggleView" v-model.number="incomeVal"  class="shadow input income__input"  type="text" name="">
            <input  v-else-if="!toggleView"  disabled v-model.number="incomeRemaining"   class="shadow input income__input" placeholder="remaining"  type="text" name="">
            <button v-if="toggleView" @click="set" class="button shadow  income__button">Enter</button>
            <button v-else @click="resetBtn"  class="button shadow income__button button--pdf">Reset</button>
            </div>
            <widget :visible="toggleView"></widget>
         </main>
    </div>
</template>

<script>

import {mapActions,mapState} from 'vuex';


    export default {
       data() {
           return {
               incomeVal:10000,
               toggleView:true,
           }
       },
       computed: {
           ...mapState([
               'income',
               'items'
           ]),
           incomeRemaining(){
              return  (this.income - _.sumBy(this.items,'amount'));
           }
       },
      
     methods:{
             ...mapActions([
               'setIncome',
               'setSavings',
                 'reset',
           ]),

            set(){
                this.setIncome(this.incomeVal);

             
                
                const payload = {
                    item: "SAVINGS(10% OF YOUR INCOME)",
                    amount: (10 * this.incomeVal) / 100,
                    percentage: '10%',
                }

                this.setSavings(payload);

                this.toggleView = !this.toggleView;   
                toastr["success"]("Income Set Successfully");
            },
            resetBtn(){
                this.reset();
                this.toggleView = !this.toggleView;
                toastr["success"]("Reset Successfully");
            }
       }

    }
    
</script>


