import React from 'react'
import {View, Text, TouchableOpacity} from 'react-native'
import {useDispatch,useSelector} from 'react-redux'
import {plusCounter, minCounter} from './redux/action'


const Counter = () => {
const dispatch =useDispatch();
const counter = useSelector(data => data.counter)
const counter2 = useSelector(data => data.counter2)
    return (
        <View style={{flex:1, alignItems:'center',justifyContent:'center'}}>
          <Text style={{fontSize:50,flexDirection:'row'}}>
              PAPAN SKOR
          </Text>

          <Text style={{fontSize:30,flexDirection:'row', }}>
              A
          </Text>
          
          <TouchableOpacity style={{backgroundColor:'grey',padding:10}} onPress={()=> dispatch(plusCounter(counter))}> 
              <text style={{fontSize:30}}>
                  +
              </text>
          </TouchableOpacity>
          
            <text style={{fontSize:50, justifyContent:'center', }}> 
                {counter}

            </text >
            <Text>Versus</Text>
            <text style={{fontSize:50}}> 
                {counter2}

            </text>

            <TouchableOpacity style={{backgroundColor:'grey',padding:10}} onPress={()=> dispatch(minCounter(counter))}>
              <text style={{fontSize:30}}>
                  +
              </text>
          </TouchableOpacity>
          <Text style={{fontSize:30,flexDirection:'row', }}>
              B
          </Text>

          

          

        </View>

        
    )
}

export default Counter