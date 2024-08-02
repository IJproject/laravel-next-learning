"use client";

import React from "react";
import axios from "@/libs/axios";

export const CommunityPage = () => {
  React.useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get("/communities/");
        console.log(response.data);
      } catch (error) {
        console.error("Network error:", error);
      }
    };

    fetchData();
  }, []);

  return (
    <>
      <h1>Communities</h1>
    </>
  );
};
