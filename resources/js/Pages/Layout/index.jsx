import React from "react";
import Footer from "../Compoment/footer";
import Navbar from "../Compoment/navbar";

const Layout = ({ children }) => {
    return (
        <>
            <Navbar/>
            {children}
            <Footer />
        </>
    );
};

export default Layout;
