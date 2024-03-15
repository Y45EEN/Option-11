import React from "react";
import { InertiaLink } from "@inertiajs/inertia-react";
import Authenticated from "@/Layouts/AuthenticatedLayout";
import { Inertia } from "@inertiajs/inertia";
import NavBar from "@/Components/NavBar";
import { HSquareFill } from "react-bootstrap-icons";
import { Link } from "@inertiajs/react";
import AdminNavbar from '@/Pages/AdminNavbar';
const AdminEditUsers = ({ users }) => {
 
    const bikePartList = users.map((user) => {
        const date = new Date(user.created_at);

        // Format date using toLocaleDateString and toLocaleTimeString
        const formattedDate = date.toLocaleDateString();
        const formattedTime = date.toLocaleTimeString();
        return (

            <tr>
            <td scope="row">{user.userid}</td>
            <td scope="row">{user.firstname}</td>
            <td scope="row">{user.lastname}</td>
    
            <td scope="row">{formattedDate} {formattedTime}</td>
    
            <td scope="row">
                <a href={route("adminUpdateShow", { userid: user.userid })}>
                    Edit User |
                </a>{" "}
                <a href={route("adminDeleteUsers", { userid: user.userid })}>
                    Delete user
                </a>{" "}
            
            </td>
        </tr>
        );

       

       
    });
                
    return (

      <div>  <AdminNavbar/>
      
        <div className="container">
             
            

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        
                        <th scope="col">Date created</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>{bikePartList}</tbody>
                
            </table>
            <a   className="text-center bg-blue-500 text-white px-4 py-2 rounded-md" href="users/export/" >Export</a>
        </div>
        </div>
        
    );
};

export default AdminEditUsers;
