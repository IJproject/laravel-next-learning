"use client";

import React from "react";
import axios from "@/libs/axios";
import { paths } from "@/external/openapi";

// type GetCommunitiesResponse = {
//   data: paths['/api/communities']['get']['responses']['200']['content']['application/json'];
// };

export const CommunityPage = () => {
  const [communities, setCommunities] = React.useState([]);

  React.useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get("/api/communities");
        console.log(response.data);
        setCommunities(response.data.communities);
      } catch (error) {
        console.error("Network error:", error);
      }
    };

    fetchData();
  }, []);

  const handleSubmit = async () => {
    try {
      const response = await axios.post("/communities/", { name: `Community ${communities.length + 1}`, description: 'This is a new community.' });
      console.log(response.data);
    } catch (error) {
      console.error("Network error:", error);
    }
  };

  return (
    <>
      <h1>Communities</h1>
      <ul>
        {communities.map((community) => (
          <li key={community.id}>
            {community.name} <br />
            {community.description}
          </li>
        ))}
      </ul>
      <button onClick={handleSubmit}>コミュニティの作成</button>
    </>
  );
};
