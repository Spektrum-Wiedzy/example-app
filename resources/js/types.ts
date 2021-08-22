export interface Product {
    id: number;
    name: string;
    description: string;
    images: Image[];
    price: number;
    created_at: string;
    updated_at: string;
}

export interface DayOffer {
    id: number;
    price: number;
    starts_at: string;
    ends_at: string;
    limit: number;
    sold: number;
    product: Product;
    product_id: number;
    created_at: string;
    updated_at: string;
}

export interface Image {
    id: number;
    url: string;
}

export interface User {
    favorites: number[],
}
