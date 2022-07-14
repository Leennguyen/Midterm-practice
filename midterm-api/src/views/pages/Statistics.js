import axios from "axios";
import { useEffect, useState } from "react"

const Statistics =() =>{
    const [statistics, setStatistics] =useState([]);
    useEffect(() => {
        getStatistics();
    }, []);
    const getStatistics = async () => {
        await axios.get(`http://localhost:8000/api/categories/statistics`).then(({data}) => {
            setStatistics(data);
        });
    };
    return (
        <table className="table container">
            <thead>
                <tr>
                    <td>Category id</td>
                    <td>Category</td>
                    <td>Count of foods</td>
                </tr>
            </thead>
            <tbody>
                {
                    statistics.map(cate => (
                        <tr>
                            <td>{cate.id}</td>
                            <td>{cate.name}</td>
                            <td>{cate.foodCount}</td>
                        </tr>
                    ))
                }
            </tbody>
        </table>
    )
}
export default Statistics