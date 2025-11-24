import { useState } from "react";

function MyForm() {
  const [name, setName] = useState("");

  const handleSubmit = e => {
    e.preventDefault();
    alert(`Name: ${name}`); 
  };

  return (
    <form onSubmit={handleSubmit}>
      <lable>Please Enter your Name:</lable><br/>
      <input
        type="text"
        value={name}
        onChange={e => setName(e.target.value)} 
      />
      <button type="submit">Submit</button>
    </form>
  );
}

export default MyForm;
