# Commodity Api

CRUD application using Lumen for lightweight development.

## Assumptions made

Class, Family and Segment are handled by different api. 

A frontend or tool would ensure correct IDs for (Class, Family and Segment).

Deletion of a Commodity wouldnt cascade onto these above tables.

## Setup

Project code can be found in `app` docker configuration `images`

1. first install the vendor files
```bash
docker run --rm -v $(pwd):/app composer install
```

2. run the application
```bash
docker-compose up --build -d
```

3. to stop 
```bash
docker-compose down
```

### Configuration

Configuration values can be changed from the `docker-compose.yml`

Database using sqlite containing the prepared data from the commodity csv, can be found at `project/database/database.sqlite`

## API endpoints


### GET
showOneCommodity: `/commodity/{id}` br/>
showAllCommodity: `/commodity` br/>

### POST
createCommodity: `/commodity` br/>
```json
{
  "name": "Example",
  "class_id": "10101500",
  "family_id": "10100000",
  "segment_id": "10000000"
}
```

### PUT
updateCommodity: `/commodity/{id}` br/>
```json
{
  "segment_id": "10000000"
}
```

### DELETE
removeOneCommodity: `/commodity/{id}`




