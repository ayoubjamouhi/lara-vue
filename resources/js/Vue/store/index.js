import Vue from 'vue';
import Vuex from "vuex";
Vue.use(Vuex);

const counterModule = {
    namespaced: true,
    state: {
        counter: 5,
    },
    mutations: {
        increment(state, payload) {
            state.counter+=5;
        }
    },
    getters: {
        getCounter(state) {
            return state.counter;
        }
    },
    actions: {
        incrementAct(context, payload) {
            console.log(context)
            context.commit('increment', payload);
        }
    }
}
const categoryModule = {
  state: {
      categories: []
  }
};
const store = new Vuex.Store({
    state: {
    },
    mutations: {
    },
    getters: {
    },
    actions: {
    },
    modules: {
        counter: counterModule,
        category: categoryModule
    }
});

export default store;
