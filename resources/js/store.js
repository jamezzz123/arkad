import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

import items from './data/data.js'
export default new Vuex.Store({

 state:{
   items, 
   income:1000
 },
mutations:{

  setIncome(state,payload){
    state.income = payload
  },

  addItem(state,payload){
    state.items.push(payload);
  },

  setSavings(state,payload) {
      state.items.unshift(payload)
  },
  removeItem(state,payload){
    state.items.splice(payload,1)
  },
  reset(state){
    state.items = [];
  }


},
actions:{

  setIncome({commit},payload){
    commit('setIncome',payload)
  },

  addItem({commit},payload){  
    commit('addItem',payload)
  },

   setSavings({ commit},payload) {
    
    commit('setSavings',payload)
  },
  removeItem({ commit }, payload){
    commit('removeItem', payload)
  },
   reset({commit}) {
       commit('reset')
   }

}

})