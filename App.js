import React from 'react';
import { StyleSheet, Text, View } from 'react-native';
import Counter from './Counter'
import {Provider} from 'react-redux'
import storeState from './redux/store'
export default function App() {
  const [value, setValue] = React.useState("");
  return (
    <Provider store={storeState}>
<Counter/>
  

    </Provider>

    
     
      

  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
