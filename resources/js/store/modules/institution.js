import axios from 'axios';
import * as types from '../mutation-types';

// state
export const state = {
  institution: null,
};
// getters
export const getters = {
  institution: state => state.institution,

  // check: state => state.institution !== null
};
// mutations
export const mutations = {
  [types.FETCH_INSTITUTION](state, {
    institution
  }) {
    state.institution = institution;
  },
};
// actions
export const actions = {
  async fetchInstitution({
    commit
  }) {
    try {
      const {data} = await axios.get('http://192.168.100.22:8000/institution/')
      commit(types.FETCH_INSTITUTION, {
        institution: data.data
      });
      return data;
    } catch (e) {
      console.log(e);
    }
  },

};
