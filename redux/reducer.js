import { compose } from 'redux'
import {plus,min} from './tipe'

const initData = {
    counter:0,
    counter2:0
}

export const reducerCounter = (state = initData, action)=>{
    switch(action.type){
        case plus:
            console.log('Tambah ');
            return {...state,counter:action.data + 1}
        case min:
            console.log('Kurang ');
            return {...state,counter2:action.data + 1}
        default:return state;
        }
}