import React from 'react'
import { Route, Routes } from 'react-router-dom'
import { HomePage } from '../Pages/HomePage/HomePage'
import { Login } from '../Pages/Login/Login'

export const RouterDefault = () => {
  return (
    <Routes>
      <Route path="/" element={<Login />}/>
      <Route path="/signin" element={<HomePage />}/>
    </Routes>
  )
}
