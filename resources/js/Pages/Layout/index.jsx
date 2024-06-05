import React from "react";
import Navbar from "../Compoment/navbar"
import Footer from "../Compoment/footer";

const Layout = ({children}) => {
    return (
        <>
            <Navbar/>
            {children}
            <Footer/>
        </>
    )
} 

export default Layout;