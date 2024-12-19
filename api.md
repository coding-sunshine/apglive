# API Documentation

## Endpoints

### GET /api/fusion/projects/allPropertyCount
Fetches the count of properties available categorized by states and property types.

**Headers:**
- `API-KEY`: Your API Key.
- `API-URL`: Your API URL.

**Parameters:**
- None

**Response:**
```json
{
  "data": {
    "states": [
      {
        "state": "NSW",
        "long_name": "New South Wales",
        "count": 94,
        "first_image_url": "https://via.placeholder.com/300?text=Image",
        "image_urls": []
      },
      ...
    ],
    "project_types": [
      {
        "id": 1,
        "title": "House and Land",
        "count": 345,
        "first_image_url": "https://via.placeholder.com/300?text=Image",
        "image_urls": []
      },
      ...
    ]
  }
}
```

---

### GET /api/fusion/projects
Fetches a list of projects.

**Headers:**
- `API-KEY`: Your API Key.
- `API-URL`: Your API URL.

**Parameters:**
- `subscriber` (required): Subscriber ID.
- `limit` (optional): Number of projects to return (default is 15).
- `lat` (optional): Latitude for location-based search.
- `lng` (optional): Longitude for location-based search.
- `radius` (optional): Radius in kilometers for location-based search.
- `state` (optional): Filter by state.
- `project_type` (optional): Filter by project type.
- `bedrooms` (optional): Minimum number of bedrooms.
- `bathrooms` (optional): Minimum number of bathrooms.
- `range` (optional): Enable price range search (1).
- `selected_min_price` (optional): Minimum price for filtering.
- `selected_max_price` (optional): Maximum price for filtering.
- `sort_by` (optional): Sorting criteria (`price_asc`, `price_desc`, `date_asc`, `date_desc`).

**Response:**
```json
{
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 4,
    "path": "https://fusioncrm.software/api/fusion/projects",
    "per_page": 15,
    "to": 15,
    "total": 47
  },
  "data": [
    {
      "id": 13684,
      "title": "Harlowe Estate - Huntly",
      "state": "VIC",
      "suburb": "Huntly",
      "min_price": "681999.00",
      "max_price": "686999.00",
      ...
    }
  ]
}
```

---

### GET /api/fusion/lots
Fetches lots information for a specific subscriber.

**Headers:**
- `API-KEY`: Your API Key.
- `API-URL`: Your API URL.

**Parameters:**
- `subscriber` (required): Subscriber ID.
- `state` (optional): Filter by state.
- `suburb` (optional): Suburb ID for filtering.
- `lot_status` (optional): Lot status name string.
- `update_start_at` (optional): Start date for updates.
- `update_end_at` (optional): End date for updates.
- `is_featured_only` (optional): Filter for featured lots (1).
- `is_rent_to_sell` (optional): Filter for rent-to-sell lots (1).
- `is_high_rental` (optional): Filter for high rental yield lots (1).

**Response:**
```json
{
  "data": [
    {
      "id": 13309,
      "project_id": 13309,
      "title": "NDIS (SDA) Ellendale - Murray Bridge",
      "price": "918200.00",
      "state": "SA",
      ...
    }
  ]
}
```

---

### GET /api/fusion/projects/{id}
Fetches detailed information about a specific project.

**Headers:**
- `API-KEY`: Your API Key.
- `API-URL`: Your API URL.

**Parameters:**
- `id` (required): Project ID.
- `related` (optional): Include related data (`status`, `projecttype`, `address`, `developer`, `similar_projects`).

**Response:**
```json
{
  "data": {
    "id": "13450",
    "title": "NDIS (SDA) Chambers Green Estate - Chambers Flat",
    "state": "QLD",
    "min_price": "1107816.00",
    "max_price": "1115469.00",
    ...
  }
}
```

---

### GET /api/fusion/airtables
Fetches all projects with lots within a specified date range.

**Headers:**
- `API-KEY`: Your API Key.
- `API-URL`: Your API URL.

**Parameters:**
- `page` (optional): Page number for pagination.
- `limit` (optional): Number of projects to return per page.
- `start-date` (required): Start date for filtering.
- `end-date` (required): End date for filtering.

**Response:**
```json
{
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 9,
    "path": "https://fusioncrm.software/api/fusion/airtables",
    "per_page": "10",
    "to": 10,
    "total": 84
  },
  "data": [
    {
      "pid": 12542,
      "title": "Hedley Park - Somerset",
      "state": "QLD",
      "min_price": "0.00",
      "max_price": "0.00",
      ...
    }
  ]
}
```

---

### GET /api/fusion/states
Fetches the list of available states.

**Headers:**
- `API-KEY`: Your API Key.
- `API-URL`: Your API URL.

**Response:**
```json
{
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https://fusioncrm.software/api/fusion/states",
    "per_page": 15,
    "to": 8,
    "total": 8
  },
  "data": [
    {
      "state": "NSW",
      "long_name": "New South Wales",
      ...
    }
  ]
}
```

---

### GET /api/fusion/projecttypes
Fetches the list of available project types.

**Headers:**
- `API-KEY`: Your API Key.
- `API-URL`: Your API URL.

**Response:**
```json
{
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https://fusioncrm.software/api/fusion/projecttypes",
    "per_page": 15,
    "to": 11,
    "total": 11
  },
  "data": [
    {
      "id": 1,
      "title": "House and Land",
      ...
    }
  ]
}
```

---

### GET /api/fusion/statuses
Fetches the list of available project statuses.

**Headers:**
- `API-KEY`: Your API Key.
- `API-URL`: Your API URL.

**Parameters:**
- `type` (required): Status type (`Project Status`).

**Response:**
```json
{
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https://fusioncrm.software/api/fusion/statuses",
    "per_page": 15,
    "to": 3,
    "total": 3
  },
  "data": [
    {
      "id": 1,
      "name": "Available",
      ...
    }
  ]
}
```

---

### GET /api/fusion/suburbs
Fetches the list of available suburbs and their location details.

**Headers:**
- `API-KEY`: Your API Key.
- `API-URL`: Your API URL.

**Response:**
```json
{
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1020,
    "path": "https://fusioncrm.software/api/fusion/suburbs",
    "per_page": 15,
    "to": 15,
    "total": 15299
  },
  "data": [
    {
      "suburb": "Sydney",
      "state": "NSW",
      ...
    }
  ]
}
```

---

### GET /api/fusion/projects/propertiesMinMaxPrice
Fetches the minimum and maximum price for available properties.

**Headers:**
- `API-KEY`: Your API Key.
- `API-URL`: Your API URL.

**Response:**
```json
{
  "data": {
    "min_price": "525000.00",
    "max_price": "3100000.00"
  }
}
```
