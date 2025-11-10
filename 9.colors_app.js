import React, { useState } from 'react'; 
 
function App() { 
 
  const [color, setColor] = useState('black'); 
  const [index, setIndex] = useState(0); 
   
  // Function to change the color randomly 
  const changeColor = () => { 
    const colors = ['red', 'blue', 'green', 'purple', 'orange', 'pink', 'brown']; 
    const newColor = colors[index]; 
    setColor(newColor); 
    setIndex((prevIndex) => (prevIndex + 1) % colors.length); 
  }; 
  return ( 
    <div> 
      <h1>Change Paragraph Color</h1> 
      <p style={{ color: color, fontSize: '20px' }}> 
        Click the button to change my color! </p> 
      <button onClick={changeColor} > Change Color</button> 
    </div> 
  ); 
} 
export default App;