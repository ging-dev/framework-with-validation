from fastapi import FastAPI
from pydantic import BaseModel


class User(BaseModel):
    name: str
    age: int


app = FastAPI()


@app.get("/user/{name}")
async def user(name: str):
    return {"message": f"Hi {name}"}


@app.get("/post/{id}")
async def post(id: int):
    return {"message": f"post#{id}"}


@app.post("/user")
async def get_user(user: User):
    return user.model_dump()
