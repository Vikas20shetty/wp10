import React, { useState } from 'react';

function App() 
{
  const [count, setCount] = useState(0);

  return (

    <div>
      <h1>Simple Counter App</h1>
      <h2>Count: {count}</h2>

      <button onClick={() => setCount(c => c + 1)}>+</button>
      <button onClick={() => setCount(c => c - 1)}>-</button>
      <button onClick={() => setCount(0)}>Reset</button>

    </div>
  );
}
export default  App;
